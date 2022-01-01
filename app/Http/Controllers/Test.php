<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

use function GuzzleHttp\Promise\all;

class Test extends Controller
{




public function edit($id){

    
    $all=Crud::find($id);
    return json_encode([
    "data"=>$all
    ]);
}
    public function get(){

$all=Crud::all();
        
        return view("crud.index",compact('all'));
    }
    public function store( Request $request){
        //  dd($request->all());
 $x= new Crud();

 $x->name=$request->name;
 $x->roll=$request->roll;
 $x->email=$request->email;
 $loc="/images/upload/";
 if($request->hasFile("photo")){
          $im=$request->file("photo")  ;
          $extension=$im->getClientOriginalExtension();
          $name="user_".time().".".$extension;
          $im->move(public_path().$loc,$name);
          $x->photo=$loc.$name;
          

}
$x->save();
return json_encode([
    "success"=>true
]);

    }
    public function load(){
$i=0;

        $data=Crud::all();
        foreach($data as $d){
            $i++;
?>
<tr>

    <td>
        <?php  echo $i ?>
    </td>
    <td>
        <?php  echo $d->name ?>
    </td>
    <td>
        <?php  echo $d->roll ?>
    </td>
    <td>
        <?php  echo $d->email ?>
    </td>
    <td>
        <img src=" <?php  echo $d->photo ?>" alt="">
    </td>
    <td>
        <a class="btn btn-sm btn-info" href="#">View</a>
        <a x="<?php  echo $d->id ?>" data-toggle="modal" class="btn btn-sm btn-warning edit" href="#edit">Edit</a>
        <a class=" btn btn-sm btn-danger" href="#">Delete</a>
    </td>

</tr>



<?php


}

}
}