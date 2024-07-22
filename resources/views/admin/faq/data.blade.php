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
                                    <div class="ml-5">
                                        <a href="{{ route('admin.faqs.create') }}"><input type="submit" value="Insert Data"
                                                class="btn btn-success"></a>
                                    </div>
                                </div>


                            </div>
                            <!-- /.card-header -->

                            <div class="card-body table-responsive p-0" style="height: 400px;">
                                <table class="table table-head-fixed text-wrap">

                                    <thead>
                                        <tr>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($faqs as $faq)
                                            <tr>
                                                <td class="col-4">{{ $faq->question }}</td>
                                                <td class="col-6">{{ $faq->answer }}</td>
                                                <td class="col-2">
                                                    <a href="{{ route('admin.faqs.edit', $faq) }}">
                                                        <button type="submit" class="btn btn-default">
                                                            Edit
                                                        </button>
                                                    </a>

                                                    <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-default">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->
                    </div>
                </div>

                {{-- MODALS POPUP --}}

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
