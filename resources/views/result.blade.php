<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Project Management Dashboard UI</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>

@include('head')
 @include('sidebnav')
<!-- partial:index.partial.html -->

    <div class="projects-section">
      <div class="projects-section-header">
        <p>Live Stream of Votes</p>
        <p class="time">june, 20</p>
      </div>
      <div class="projects-section-line">
        <div class="projects-status">
          <div class="item-status">
            <span class="status-number"></span>
            <span class="status-type">Results</span>
          </div>
          
          
        </div>
        <div class="view-actions">
          <button class="view-btn list-view" title="List View">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
              <line x1="8" y1="6" x2="21" y2="6" />
              <line x1="8" y1="12" x2="21" y2="12" />
              <line x1="8" y1="18" x2="21" y2="18" />
              <line x1="3" y1="6" x2="3.01" y2="6" />
              <line x1="3" y1="12" x2="3.01" y2="12" />
              <line x1="3" y1="18" x2="3.01" y2="18" /></svg>
          </button>
          <button class="view-btn grid-view active" title="Grid View">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
              <rect x="3" y="3" width="7" height="7" />
              <rect x="14" y="3" width="7" height="7" />
              <rect x="14" y="14" width="7" height="7" />
              <rect x="3" y="14" width="7" height="7" /></svg>
          </button>
        </div>
      </div>

     
      <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Candidate</th>
            <th scope="col">Votes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th colspan="3">President Results</th>
        </tr>
        @foreach($candidates->where('group_id', 1) as $candidate)
    <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $candidate->candidate_name }}</td>
        <td>{{ $voteCounts[$candidate->id] }}</td>
    </tr>
@endforeach
    </tbody>
</table>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Candidate</th>
            <th scope="col">Votes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th colspan="3">Secretary Results</th>
        </tr>
        @foreach($candidates->where('group_id', 2) as $candidate)
    <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $candidate->candidate_name }}</td>
        <td>{{ $voteCounts[$candidate->id] }}</td>
    </tr>
@endforeach
    </tbody>
</table>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Candidate</th>
            <th scope="col">Votes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th colspan="3">Treasury Results</th>
        </tr>
        @foreach($candidates->where('group_id', 3) as $candidate)
    <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $candidate->candidate_name }}</td>
        <td>{{ $voteCounts[$candidate->id] }}</td>
    </tr>
@endforeach
    </tbody>
</table>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Candidate</th>
            <th scope="col">Votes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th colspan="3">Entertainment Results</th>
        </tr>
        @foreach($candidates->where('group_id', 4) as $candidate)
    <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $candidate->candidate_name }}</td>
        <td>{{ $voteCounts[$candidate->id] }}</td>
    </tr>
@endforeach
    </tbody>
</table>

  <div>
  <div>
  <div>
  <div>
        

  <script  src="./script.js"></script>

</body>
</html>

