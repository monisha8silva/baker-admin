
 
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


        <!-- Carrers -->
        <div class="row">
                <div class="col-8">
                
                        <div class="container">
            
                
                    
                    
                            <div class="jumbotron">

                                            <div class="carrers-title text-center" style="padding-top:60px;">
                                                <h2>Data Input</h2>
                                            </div>
                                                @if (\Session::has('success'))
                                                    <div class="alert alert-success">
                                                    
                                                            <h4>{{ \Session::get('success') }}</h4>
                                                        
                                                    </div>
                                                @endif

                                                    <table class="table table-dark" style="border-collapse: collapse; width: 100%;" border="1">
                                                            <tr>
                                                            <td style="width: 20%;">Food Id</td>
                                                           
                                                            <td style="width: 20%;">WebCategoryId</td>
                                                    
                                                            <td style="width: 20%;">Order Ticket Name</td>
                                                         
                                                            <td style="width: 20%;">Food Code</td>
                                                            <td style="width: 20%;">Description</td>
                                                            <td style="width: 20%;">Price</td>
                                                            
                                                            <td style="width: 20%;">Image</td>
                                                            <td style="width: 20%;"></td>
                                                            </tr>
                                                        @foreach($food as $row)
                                                            <tr>
                                                            <td style="width: 20%;">{{$row->FoodId}}</td>
                                                           
                                                            <td style="width: 20%;">{{$row->WebCategoryId}}</td>
                                                           
                                                            <td style="width: 20%;">{{$row->OrderTicketName}}</td>
                                                            
                                                            <td style="width: 20%;">{{$row->FoodCode}}</td>
                                                            <td style="width: 20%;">{{$row->Description}}</td>
                                                            <td style="width: 20%;">{{$row->Price}}</td>
                                                            <td style="width: 20%;" ><img width = "200px" height = "200" src="/img/{{$row->Img}}"></img></td>
                                                          
                                                            <td style="width: 20%;"><a href="/click_edit/{{$row->FoodId}}">Edit</a></td>
                                                            </tr>




                                                            
                                                        @endforeach
                                                    </table>
 
</div>

                            </div>
                        </div>

                    </div>
                    <div class="col-4">
                
                </div>
   
         </div>                   


  <!-- </div> -->