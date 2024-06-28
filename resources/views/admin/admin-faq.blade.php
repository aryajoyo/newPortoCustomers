@extends('admin.admin-components.admin-layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>FAQ Data</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">FAQ Data</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 400px;">
                                <table class="table table-head-fixed text-wrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>What do you mean by "Figma assets"?</td>
                                            <td>You will have access to download the full Figma project including all of the
                                                pages, the components, responsive pages, and also the icons, illustrations,
                                                and images included in the screens.</td>
                                            <td>
                                                <button type="button" class="btn btn-default" data-toggle="modal"
                                                    data-target="#modal-lg">
                                                    Edit
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>What does "lifetime access" exactly mean?</td>
                                            <td>Once you have purchased either the design, code, or both packages, you will
                                                have access to all of the future updates based on the roadmap, free of
                                                charge.</td>
                                            <td>
                                                <button type="button" class="btn btn-default" data-toggle="modal"
                                                    data-target="#modal-lg">
                                                    Edit
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>How does support work?</td>
                                            <td>We're aware of the importance of well qualified support, that is why we
                                                decided that support will only be provided by the authors that actually
                                                worked on this project. Feel free to contact us and we'll help you out as
                                                soon as we can.</td>
                                            <td>
                                                <button type="button" class="btn btn-default" data-toggle="modal"
                                                    data-target="#modal-lg">
                                                    Edit
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>I want to build more than one project. Is that allowed?</td>
                                            <td>You can use Windster for an unlimited amount of projects, whether it's a
                                                personal website, a SaaS app, or a website for a client. As long as you
                                                don't build a product that will directly compete with Windster either as a
                                                UI kit, theme, or template, it's fine. Find out more information by reading
                                                the license.</td>
                                            <td>
                                                <button type="button" class="btn btn-default" data-toggle="modal"
                                                    data-target="#modal-lg">
                                                    Edit
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>What does "free updates" include?</td>
                                            <td>The free updates that will be provided is based on the roadmap that we have
                                                laid out for this project. It is also possible that we will provide extra
                                                updates outside of the roadmap as well.</td>
                                            <td>
                                                <button type="button" class="btn btn-default" data-toggle="modal"
                                                    data-target="#modal-lg">
                                                    Edit
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

                {{-- MODALS POPUP --}}
                <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Large Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Question</label>
                                            <input type="text" class="form-control" placeholder="Enter ..."
                                                value="What do you mean by 'Figma assets'?">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Answer</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ...">You will have access to download the full Figma project including all of the pages, the components, responsive pages, and also the icons, illustrations, and images included in the screens.</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
