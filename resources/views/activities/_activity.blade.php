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
    </tr>
  @endforeach
  </tbody>
</table>
