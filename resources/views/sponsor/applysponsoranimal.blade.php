@extends('sponsor/sponsorpage')
@section('content')
<section class="py-5"  style="background-image:linear-gradient(50deg,white,lightgreen);">
    <div class="container py-5">
        <h2 class="lined mb-4">Animal Sponsorship Form</h2>
        <div class="row">
            <div class="col-8 pt-3">
               @include('flashmessages')
                <form action="{{route('sponsoranimalcreate',$sponsors['id'])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mb-4 field-required">
                        <label for="name">Animal Name</label>
                        @php
                            $animalName = null;
                            switch (true) {
                                case isset($mammal['m_name']):
                                    $animalName = $mammal['m_name'];
                                    break;
                                case isset($bird['b_name']):
                                    $animalName = $bird['b_name'];
                                    break;
                                case isset($fish['f_name']):
                                    $animalName = $fish['f_name'];
                                    break;
                                case isset($reptile['r_name']):
                                    $animalName = $reptile['r_name'];
                                    break;
                                case isset($amphibian['a_name']):
                                    $animalName = $amphibian['a_name'];
                                    break;
                            }
                        @endphp
                        <input type="text" class="form-control" id="name" value="{{ $animalName }}" name="sponsor_animal" placeholder="Enter correct animal name..." required>
                    </div>
                    <div class="mb-4 field-required">
                        <label for="total_price">Total Price</label>
                        <input type="number" class="form-control" id="total_price" name="total_price" placeholder="" min="500" required>
                    </div>

                    <div class="mb-4 field-required">
                        <label for="start_date">Contract Start Date</label>
                        <input type="date" class="form-control" name="start_date" id="start_date" required>
                    </div>
                    <div class="mb-4 field-required">
                        <label for="end_date">Contract End Date</label>
                        <input type="date" class="form-control" name="end_date" id="end_date" required>
                    </div>
                    <div class="mb-4 field-required">
                        <label for="s_url">URL of your business</label>
                        <input type="text" class="form-control" name="s_url" id="s_url" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="file">Image to be displayed on signage</label><br />
                        <input type="file" name="image" className="form-control-file" id="file" accept="image/*" required/>
                    </div>


                    <button class="btn btn-primary btn-lg text_center w-100" type="submit" name="submit"> Apply for Sponsorship</button>
            </div>
        </div>
    </div>
</section>
@endsection