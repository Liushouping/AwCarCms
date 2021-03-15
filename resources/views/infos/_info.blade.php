<table class="table table-hover">
  <tbody>
  @foreach ($infos as $info)
    <tr>
      <td>
      <a href="{{ route('info.showInfo', $info->id) }}">
      {{ $info->created_at->format ('Y-m-d')}}
      &nbsp&nbsp&nbsp
      {{ $info->title }}
      </a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

<div class="d-flex justify-content-center">
{{ $infos->render() }}
</div>
