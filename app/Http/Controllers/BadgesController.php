<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Badges;

class BadgesController extends Controller
{
    public function index(){
        $Badges = Badges::all();
        $data = ['LoggedUserInfo'=>Users::where('id','=', session('LoggedUser'))->first()];
        return view('Badgespage.badge', $data)
        ->with('Badges', Badges::all());

        //compact('Badges',$Badges));
    }

    public function showAddBadgeForm(){

        return view('Badgespage.showAddBadgeForm');
    }

    public function saveBadge(Request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('badges'), $imageName);
        $badge = Badges::create([
            'title' => $request['title'],
            'type' => $request['type'],
            'description' => $request['description'],
            'requirements' => $request['requirements'],
            'image' => $imageName,
        ]);
        if($badge){
            return redirect('badge')->with('success','New Badge created successfully');
        }else{
            return redirect('badge')->with('fail','Something went wrong, Please try again');
        }
    }
    public function editBadge($badgeId)
    {
        $badge = Badges::find($badgeId);
        return view('Badgespage.editBadge',compact('badge'));
    }
    public function updateBadge(Request $request)
    {
//        dd($request);
        $badge = Badges::find($request->id);
        $badge->title = $request->title;
        $badge->description = $request->description;
        $badge->requirements = $request->requirements;

        if(!empty($request->new_image)){
            $request->validate([
                'new_image' => 'required|image|mimes:jpeg,png,jpg',
            ]);

            $imageName = time().'.'.$request->new_image->extension();

            $request->new_image->move(public_path('badges'), $imageName);

            $badge->image = $imageName;
        }

        $badge->save();
        return redirect('/badge')->with('success','Badge updated successfully');
    }
    public function deleteBadge($badgeId)
    {
        $badge = Badges::find($badgeId);
        $badge->delete();
        return redirect('/badge')->with('success','Badge deleted successfully');
    }
}

