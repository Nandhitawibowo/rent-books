@extends('layouts.main')

@section('title', 'dashboard')

@section('content')
<h3>Welcome, {{Auth::user()->username}}!</h3>

<!-- Cards -->
<div class="row mt-4">
    <div class="col-4 books card-data">
        <div class="row">
            <div class="col-6">
                <i class="bi bi-book-half"></i>
            </div>
            <div class="col-6 d-flex justify-content-center flex-column align-items end">
                <div class="desc">
                    Books
                </div>
                <div class="count">
                    {{$book_count}}
                </div>
            </div>
        </div>
    </div>  


<div class="col-4 books card-data">
    <div class="row">
        <div class="col-6">
            <i class="bi bi-bookmarks-fill"></i>
        </div>
        <div class="col-6 d-flex justify-content-center flex-column align-items end">
            <div class="desc">
                Category
            </div>
            <div class="count">
                {{$category_count}}
            </div>
        </div>
    </div>
</div>  



    <div class="col-4 books card-data">
        <div class="row">
            <div class="col-6">
                <i class="bi bi-people"></i>
            </div>
            <div class="col-6 d-flex justify-content-center flex-column align-items end">
                <div class="desc">
                    User
                </div>
                <div class="count">
                   {{$user_count}}
                </div>
            </div>
        </div>
    </div>  

</div>
<!-- End Cards -->

<!-- Table -->
<div class="mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Username</th>
                <th>Book Title</th>
                <th>Rent Date</th>
                <th>Return Date</th>
                <th>Actual Return Date</th>
                <th>Status</th>
            </tr>
        </thead>
    </tbody>
    <tr>
        <td colspan="7" class="text-center">No Data</td>
    </tr>
</tbody>
    </table>
</div>

<!-- End table -->

@endsection