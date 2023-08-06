
			    @foreach ($location as $item)
                <div class="row row-bottom-padded-sm" style="width:1200px;margin-left:-7px">
            <div class="col-md-4 col-sm-6 col-xxs-12">
                <a href="{{url('show_medico_pharma/'.$item->id.''.$item->email)}}" class="fh5co-project-item image-popupx to-animate fadeInUp animated">
                    <img src="{{asset('pharmacie/'.$item->photo)}}" alt="Image"  height="300px" width="450px">
                    <div class="fh5co-text">
                    <h2>{{$item->name_pharma}}</h2>
                    <span style="color: #777;">{{number_format($item->distance)}}Km</span><br>
                    <span><i class="fa-solid fa-location-dot"></i>{{$item->address}}</span>
                    </div>
                </a>
            </div>
            @endforeach