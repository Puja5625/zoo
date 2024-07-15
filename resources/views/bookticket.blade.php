@extends('layout')
@section('content')

<main style="background-image:linear-gradient(50deg,white,lightgreen);">
<section class="py-5 ">
<div class="container py-5">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>

        Please register for booking ticket!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>

        <h2 class="lined mb-4">Book Tickets</h2> <!-- needs 600x400 image -->
    <div class="row">
            <div class="col-8">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">Ticket Group</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Regular</td>
                            <td>3000 ks</td>
                        </tr>
                        <tr>
                            <td>Student</td>
                            <td>2500 ks</td>
                        </tr>
                        <tr>
                            <td>Child</td>
                            <td>2000 ks</td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-5">
                    <h5>Select Number of Tickets</h5>
                    @include('flashmessages')
                    <form action="{{route('ticketcreate')}}" method="POST">
                    @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control mb-3" id="name" name="book_name" placeholder="Name of person who books the tickets" value="<?= (isset($_SESSION['v_firstname']) && isset($_SESSION['v_lastname'])) ? $_SESSION['v_firstname'] . ' ' . $_SESSION['v_lastname'] : "" ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="regular" class="col-sm-2 col-form-label">Regular:</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control mb-3" id="regular" value="0" name="regular_num">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="student" class="col-sm-2 col-form-label">Student:</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control mb-3" id="student" value="0" name="student_num">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="child" class="col-sm-2 col-form-label">Child:</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control mb-3" id="child" value="0" name="child_num">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-2 col-form-label mb-3">Date:</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="date" value="0" name="t_date" required>
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-sm-10">

                            <button class="btn btn-outline-danger" disabled>You have to be logged in to book ticket</button>
                            </div>
                        </div>
                        <!-- start of paypal -->

                        <!-- end of paypal -->
                    </form>

                </div>

            </div>
        </div>
    </div>
</section>
</main>

@endsection
