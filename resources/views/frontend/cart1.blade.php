@extends('frontend.common.main')

@section('content')


<main class="my-8">
            <div class="container px-6 mx-auto">
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                      @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 bg-green-400 rounded">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                      @endif
                        <!-- <h3 class="text-3xl text-bold">Cart List</h3> -->
                        <h4 style="font-size:30px;font-width:300px;margin-left:450px;margin-top:20px;padding-top:20px;">Cart List</h4><br>


                        
                      <div class="flex-1">
                        <table class="w-full text-sm lg:text-base" cellspacing="0" style="padding-right:20px;">
                          <thead>
                            <tr class="h-12 uppercase" >
                              <th class="hidden md:table-cell"></th>
                              <th class="text-left" style="margin-left:30px; padding-right:100px;">Name</th>
                              <th class="pl-5 text-left lg:text-right lg:pl-0">
                                <span class="lg:hidden" title="Quantity">Qtd</span>
                                <!-- <span class="hidden lg:inline">Quantity</span> -->
                              </th>
                              <th class="hidden text-right md:table-cell" style="margin-left:30px; padding-right:100px; ">Price</th>
                              <th class="hidden text-right md:table-cell " style="margin-left:30px;  padding-right:150px;"> Remove </th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($cartItems as $item)
                            <tr>
                              <td class="hidden pb-4 md:table-cell">
                                <a href="#">
                                  <img src="public/Img/{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail" width="100px" height="100px" style="margin-left:60px; margin-right:60px">
                                </a>
                              </td>
                              <td>
                                
                                  <p class="mb-2 md:ml-4">{{ $item->name }}</p>
                                  
                               
                              </td>
                              <td class="justify-center mt-6 md:justify-end md:flex">
                                <div class="h-10 w-28">
                                  <div class="relative flex flex-row w-full h-8">
                                    
                                    <form action="{{ route('cart.update') }}" method="POST" style="padding-top:50px">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $item->id}}" >
                                    <input type="number" name="quantity" value="{{ $item->quantity }}" 
                                    class="w-6 text-center bg-gray-300" />
                                    <button type="submit" class="px-2 pb-2 ml-2 text-white bg-blue-500" style="background-color:#048343; ">Update</button>
                                    </form>
                                  </div>
                                </div>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base">
                                    ${{ $item->price }}
                                </span>
                              </td>
                              <td class="hidden text-right md:table-cell" style="padding-right:150">
                                <form action="{{ route('cart.remove') }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="{{ $item->id }}" name="id">
                                  <button class="btn btn-primary" style="background-color:#960e0e; ">Delete</button>
                              </form>
                                
                              </td>
                            </tr>
                            @endforeach
                             
                          </tbody>
                          
                        </table>
                        
                        <div style="float:right; margin-right:60px">
                         Total: ${{ Cart::getTotal() }}
                        </div>
                        <div>
                          <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-red-800 bg-red-300" style="margin-left:60px; margin-top:30px; margin-bottom:50px">Remove All Cart</button>
                          </form>
                        </div>
                        <a href="details"><button type="button" class="btn btn-primary btn-lg" style="margin-top:20px;margin-left:850px;width:200px;margin-bottom:30px;">Checkout</button></a>


                      </div>
                    </div>
                  </div>
            </div>
        </main>





@endsection