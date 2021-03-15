<table class="table table-hover">
  <tbody>
  @foreach ($activitys as $activity)
  <a href="{{ route('activity.showactivity', $activity->id) }}">
    <tr>
      <td>
      <kbd>
      @if($activity->status == 0)準備@elseif($activity->status == 1)進行@else結束@endif
      </kbd>
      &nbsp
       {{ $activity->title }}
      </td>
    </tr>
  </a>
  @endforeach
  </tbody>
</table>

<div class="">
  {!! $activitys->appends(Request::except('page'))->render() !!}
</div>
