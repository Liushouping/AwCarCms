<table class="table table-hover">
  <tbody>
  @foreach ($activitys as $activity)
    <tr>
      <td>
      <a href="{{ route('activity.showactivity', $activity->id) }}">
      <kbd>
      @if($activity->status == 0)準備@elseif($activity->status == 1)進行@else結束@endif
      </kbd>
      &nbsp
       {{ $activity->title }}
      </a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

<div class="mt-2">
  {!! $activitys->appends(Request::except('page'))->render() !!}
</div>
