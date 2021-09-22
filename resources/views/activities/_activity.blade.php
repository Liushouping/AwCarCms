<table class="table table-hover">
  <tbody>
  @foreach ($activitys as $activity)
    <tr>
      <td style="font-size:16px">
      <a href="{{ route('activity.showactivity', $activity->id) }}">
      {{ $activity->created_at->format ('Y-m-d')}}
      &nbsp&nbsp&nbsp
      {{ $activity->title }}
      </a>
      </td>
      <td>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
<a href="{{ route('activity.indexActivity') }}" class="btn border w-100 bg-white" role="button">更多消息  <i class="fas fa-angle-right"></i></a>