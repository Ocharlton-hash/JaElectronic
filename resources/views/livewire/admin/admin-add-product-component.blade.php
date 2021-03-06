<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                     <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Product
                            </div>
                            <div class="col-md-6">
                               <a href="{{route('admin.products')}}" class="btn btn-success pull-right">All Products</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" enctype="multipart/-form-data">
                           <div class="form-group">
                               <label class="col-md-4 control-label">Product name</label>
                               <div class="col-md-4">
                                   <input type="text" placeholder="Product Name" class="form-control input-md"/>
                                </div>
                            </div>

                            <div class="form-group">
                               <label class="col-md-4 control-label">Product Slug</label>
                               <div class="col-md-4">
                                   <input type="text" placeholder="Product Slug" class="form-control input-md"/>
                                 </div>
                            </div>

                            <div class="form-group">
                               <label class="col-md-4 control-label">Short Description</label>
                               <div class="col-md-4">
                                   <textarea class="form-control" placeholder="Short Description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                               <label class="col-md-4 control-label">Description</label>
                               <div class="col-md-4">
                                   <textarea class="form-control" placeholder="Description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                               <label class="col-md-4 control-label">Regular Price</label>
                               <div class="col-md-4">
                                   <input type="text" placeholder="Regular Price" class="form-control input-md"/>
                                </div>
                            </div>

                            <div class="form-group">
                               <label class="col-md-4 control-label">Sale Price</label>
                               <div class="col-md-4">
                                   <input type="text" placeholder="Sale Price" class="form-control input-md"/>
                                </div>
                            </div>

                            <div class="form-group">
                               <label class="col-md-4 control-label">SKU</label>
                               <div class="col-md-4">
                                   <input type="text" placeholder="SKU" class="form-control input-md"/>
                                </div>
                            </div>

                            <div class="form-group">
                               <label class="col-md-4 control-label">Stock</label>
                               <div class="col-md-4">
                                   <select class="form-control">
                                        <option value="instock">InStock</option>
                                        <option value="Outstock">Out of Stock</option>
                                    </select>
                                 </div>
                            </div>

                            <div class="form-group">
                               <label class="col-md-4 control-label">Featured</label>
                               <div class="col-md-4">
                                   <select class="form-control">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                 </div>
                            </div>

                            <div class="form-group">
                               <label class="col-md-4 control-label">Quantity</label>
                               <div class="col-md-4">
                                    <input type="text" placeholder="Quantity" class="form-control input-md"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Product Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Category</label>
                                <div class="col-md-4">
                                    <select class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $ategories)
                                        <option value="{{$Category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Product Image</label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                                 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
