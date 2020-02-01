<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Sickness;
use App\Comment;
use App\Tip;
use App\User;

class SicknessesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //

        if (Auth::user()->email=='admin@gmail.com') {
            return redirect('/admin');
        } else {
            
            $symtoms = Sickness::all();
            $tips = Tip::orderBy('created_at','DESC')->paginate(3);
            
            $data = array(
                'symtoms'=>$symtoms,
                'tips'=>$tips
            );
        // return $data;
            return view('pages.index',['data'=>$data]);
        }
        
    
            
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin-index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name'=>'required',
            'symtoms'=>'required',
            'diagnose'=>'required',
        ],['name.required' => 'Sickness name required', 
        'symtoms.required'=>'Symtoms  required', 
        'diagnose.required'=>'Diagnose required'
        ]);
        $post = new Sickness;
        $post->name = $request->input('name');
        $post->symtoms = $request->input('symtoms');
        $post->diagnose = $request->input('diagnose');
        $post->save();
        return back()->with('success','Uploaded Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
     $sick = Sickness::find($id);
     

    //  $singlepost = array(
    //      'sick' => $sick,
    //      'comment' => $comment,
    //  );

     // return $singlepost['singlePostView'][0]['id'];

     // check if onetime payment has been paid
    //  return $singlepost;

     //return view('pages.view-sickness',['singlepost', $singlepost]); 
        
         return view('pages.view-sickness',['sick'=>$sick]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function store2(Request $request)
    {
        //
        $this->validate($request,
        [ 'comment'=>'required',],
        ['comment.required'=>'Comment Field is empty', ]
        );
        $comment = new Comment;
        $comment->comment = $request->input('comment');
        $comment->save();
        return back()->with('success','Comment Sent Succesful!');
    }
    public function contactus()
    {
        return view('pages.contactus');
    }
    public function aboutus()
    {
        return view('pages.aboutus');
    }
    public function loginPage(){
        return view('auth.login');
    }
    public function registerPage(){
        
         return view('auth.register');
    }
}
