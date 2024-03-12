<div class="row mt-3 mb-3">
    <div class="col">
        {{ $customer->name }}
    </div>
    <div class="col">
        {{ $customer->age }}
    </div>
    <div class="col">
        {{ $customer->country }}
    </div>
    <div class="col">
        <a href="{{ route('customer.data', ['customer' => $customer]) }}">Link</a>
    </div>
</div>
