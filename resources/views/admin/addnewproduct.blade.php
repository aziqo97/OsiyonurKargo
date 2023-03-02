<x-header-admin>
   <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div>

                <div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Kategoriya qo'shish menyusi</h3>
                        </div>


                        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Buyurtma shtrix kodi</label>
                                    <input type="text" name="shtrix" class="form-control"
                                           placeholder="Buyurtma shtrix kodi">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Buyurtma xolati</label>
                                    <input type="text" name="xolat" class="form-control"
                                           placeholder="Buyurtma xolati">
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Saqlash</button>
                            </div>
                        </form>
                    </div>


                </div>


            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</x-header-admin>
