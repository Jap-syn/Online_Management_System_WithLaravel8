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
           <form  action="/admin/category" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                           <div class="container">
                            <div class="row" style="padding-top:5%;">
                                <div class="col-md-6">
                                <div class="input-group input-group-outline mb-3">
                                            <input type="text" value="{{ old('name') }}" name="name" class="form-control date" placeholder="Category Name">
                                    </div>
                                </div>

                               
                                <div class="col-md-6">
                                 <div class="input-group input-group-outline mb-3">

                                    <select class="form-control" value="{{ old('status') }}" name="status" id="status">
                                                   <option value="1" selected>Active</option>
                                           </select>

                                </div>

                            </div>
                            </div>
                            </div>
                            <div class="container">

                            <div class="row">

                            <div class="card-footer">
                                               <button type="submit" onclick="myFunction1()" class="btn btn-fill btn-primary"> <i class="tim-icons icon-send"></i> Save</button>
                                             </div>
                                             </div>
                            </div>

                        </form>
        </div>
      </div>
      </div>
      </div>
      

      @include('layouts.partial.footer')