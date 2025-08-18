<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class leadController extends Controller
{
    public function leadType()
    {
        return view('lead.leadType');
    }


    public function leadView(Request $request)
    {
        // Example filters (can come from request)
        $type = $request->get('type');

        // fetch ivrstageName
        $ltya = DB::selectOne("SELECT ivrstageName FROM ivrStatus WHERE ivrurl = ?", [$type]);

        if (!$ltya) {
            return back()->with('error', 'Invalid type or no record found.');
        }

        // use ivrstageName in your main query
        $query = "SELECT C.pancard,
                         C.customerID,
                         C.name,
                         C.firstName,
                         C.lastName,
                         C.mobile,
                         C.email,
                         a.createdDate acreatedDate,
                         remark,
                         u.name uname,
                         L.*
                  FROM customer C
                  INNER JOIN leads L 
                          ON C.customerID=L.customerID 
                         AND L.status='" . $ltya->ivrstageName . "'
                  JOIN approval a 
                          ON a.leadID=L.leadID
                  LEFT JOIN users u 
                          ON a.creditedBy = u.userID 
                  ORDER BY L.leadID DESC";

        $data = DB::select($query);
        // pass to view
        return view('lead.leadViewCredit', compact('data'));
    }
}
