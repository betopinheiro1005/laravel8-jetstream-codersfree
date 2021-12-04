<div {{$attributes->merge(["class" => "bg-$color-100 border-l-4 border-$color-500 text-$color-700 p-4"])}}>
  <p class="font-bold">{{$title}}</p>
  <p>{{$slot}}</p>
  {{$teste()}}
</div>
