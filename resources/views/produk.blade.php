<div class="card" style="width: 18rem;margin: 20px">
    <img src={{$d->image}} class="card-img-top" alt="...">
    <hr style="margin: 0px">
    <div class="card-body">
        <h5 class="card-title">{{$d->name}}</h5>
        <p class="card-text"> Rp.{{$d->price}}</p>
        @if($d->type === "drink")
            <span class="badge text-bg-danger"> {{$d->type}}</span>
        @elseif($d->type === "side")
            <span class="badge text-bg-info"> {{$d->type}}</span>
        @else
            <span class="badge text-bg-warning"> {{$d->type}}</span>
        @endif
        <br>
        <div class="text-end">
            <a href="#" class="btn btn-primary text-end">Order</a>
        </div>

    </div>
</div>
