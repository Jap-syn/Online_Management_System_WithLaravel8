@include('layouts.partial.header')

<section class="content">
        <div class="container-fluid">
             <div class="row">
                 @if (session('success'))
                 <div class="flash-message col-md-12">
                     <div class="alert alert-success ">
                         {{session('success')}}
                     </div>
                 </div>
                 @elseif(session('fail'))
                 <div class="flash-message col-md-12">
                     <div class="alert alert-danger">
                         {{session('fail')}}
                     </div>
                 </div>

                 @endif
                       @if (count($errors) > 0)
                                       <div class="content mt-3">
                                           <!-- div class=row content start -->
                                           <div class="animated fadeIn">
                                               <!-- div class=FadeIn start -->
                                               <div class="card">
                                                   <!-- card start -->

                                                   <div class="card-body">
                                                       <!-- card-body start -->


                                                       <div class="row">
                                                           <!-- div class=row One start -->
                                                           @foreach ($errors->all() as $error)
                                                           <div class="col-md-12">
                                                               <!-- div class=col 12 One start -->
                                                               <p class="text-danger">* {{ $error }}</p>
                                                           </div><!-- div class=col 12 One end -->
                                                           @endforeach
                                                       </div><!-- div class=row One end -->


                                                   </div> <!-- card-body end -->

                                               </div><!-- card end -->
                                           </div><!-- div class=FadeIn start -->
                                       </div><!-- div class=row content end -->
                                       @endif
             </div>

</section>
    <!-- End Navbar -->
    <div class="container-fluid py-2">
      <div class="row">
         <div class="col-12">
          <div class="card my-2" >
       <form action="/admin/payment/{{ isset($payment)? $payment->id:0 }}" method="post"  enctype="multipart/form-data">
                    <!-- <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> -->
                    {{csrf_field()}}
                    {{ method_field('PATCH') }}

                           <div class="container">
                            <div class="row" style="padding-top:5%;">
                                <div class="col-md-6">
                                <div class="input-group input-group-outline mb-3">
                                            <input type="text" value="{{ isset($payment)? $payment->name:Request::old('name') }}" name="name" class="form-control date" placeholder="Bank Name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                <div class="input-group input-group-outline mb-3">
                                            <input type="text" value="{{ isset($payment)? $payment->user_name:Request::old('user_name') }}" name="user_name" class="form-control date" placeholder="User Name">
                                    </div>
                                </div>
   
                             
                            </div>
                            <div class="row" style="padding-top:2%;">
                                <div class="col-md-6">
                                <div class="input-group input-group-outline mb-3">
                                            <input type="text" value="{{ isset($payment)? $payment->payment_number:Request::old('payment_number') }}" name="payment_number" class="form-control date" placeholder="Account Number">
                                    </div>
                                </div>

                               
                                <div class="col-md-6">
                                 <div class="input-group input-group-outline mb-3">

                                    <select class="form-control" name="status" id="status">
 <?php
                                        if(isset($payment)){
                                        ?>
            
                                            <option value="" selected disabled>Select Status</option>
                                            <option value="1" <?php if ($payment->status == 1){ echo 'selected'; } ?> style="color:green;" >Active</option>
                                            <option value="0" <?php if ($payment->status == 0){ echo 'selected'; } ?> style="color:red;" >In-Active</option>
            
                                        <?php
                                        }
                                        else{
                                        ?>
                                            <option value="" selected disabled>Select Status</option>
                                            <option value="1" style="color:green;">Active</option>
                                            <option value="0" style="color:red;">Inactive</option>
                                        <?php 
                                        }
                                        ?>                                           </select>

                                </div>

                            </div>
                            </div>
                           
                            </div>
                            <div class="container">

                            <div class="row">

                            <div class="card-footer">
                                               <button type="submit" onclick="myFunction1()" class="btn btn-fill btn-primary"> <i class="tim-icons icon-send"></i> Update</button>
                                             </div>
                                             </div>
                            </div>

                        </form>
        </div>
      </div>
      </div>
      </div>
      

      @include('layouts.partial.footer')