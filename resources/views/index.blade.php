<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Student Voting System</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>



@include('head')
 @include('sidebnav')
    <!-- end of head -->




    <div class="projects-section">
      <div class="projects-section-header">
        <p>Voting Platform</p>
       
     
      </div>
      <div class="projects-section-line">
        <div class="projects-status">
          <div class="item-status">
            <span class="status-number">{{$total_candidates}}</span>
            <span class="status-type">Canditates</span>
          </div>
          <div class="item-status">
            <span class="status-number">{{$total_positions}}</span>
            <span class="status-type">Positions</span>
          </div>
          <div class="item-status">
            <span class="status-number">{{$registered_voters}}</span>
            <span class="status-type">Registerd Voters </span>
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
      <div class="project-boxes jsGridView">
        <div class="project-box-wrapper">
          <div class="project-box" style="background-color: #fee4cb;">
           
              <div class="more-wrapper">
                <button class="project-btn-more">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                    <circle cx="12" cy="12" r="1" />
                    <circle cx="12" cy="5" r="1" />
                    <circle cx="12" cy="19" r="1" /></svg>
                </button>
          
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header">Presidency</p>
          <p class="box-content-subheader">{{$presidents }} <br><span>candidates</span></p>
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">votes Cast</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 60%; background-color: #ff942e"></span>
          </div>
          <p class="box-progress-percentage">{{$presidents_cast}}/ {{$registered_voters}}</p>
        </div>
        <div class="project-box-footer">
          <div class="participants">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="participant">
            <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG1hbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="participant">
            <a href="{{ route('vote.president') }}" class="button-link">
        <button class="add-participant" style="color: #ff942e;">
       <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
      <path d="M12 5v14M5 12h14" />
       </svg>
      </button>
    </a>

          </div>
          <div class="days-left" style="color: #ff942e;">
            2 Days Left
          </div>
        </div>
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box" style="background-color: #e9e7fd;">
        
          <div class="more-wrapper">
            <button class="project-btn-more">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" /></svg>
            </button>
          
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header">secretary</p>
          <p class="box-content-subheader">{{$secretary}}<br><span>Candidates</span></p>
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">Votes Cast</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 50%; background-color: #4f3ff0"></span>
          </div>
          <p class="box-progress-percentage">{{$secretary_cast}}/{{$registered_voters}}</p>
        </div>
        <div class="project-box-footer">
          <div class="participants">
            <img src="https://images.unsplash.com/photo-1596815064285-45ed8a9c0463?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1215&q=80" alt="participant">
            <img src="https://images.unsplash.com/photo-1583195764036-6dc248ac07d9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2555&q=80" alt="participant">


            <a href="{{ route('vote.secretary') }}" class="button-link">
  <button class="add-participant" style="color: #096c86;">
    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
      <path d="M12 5v14M5 12h14" />
    </svg>
  </button>
</a>
            
          </div>
          <div class="days-left" style="color: #4f3ff0;">
            2 Days Left
          </div>
        </div>
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box">
        
          <div class="more-wrapper">
            <button class="project-btn-more">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" /></svg>
            </button>
          
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header">Treasury</p>
          <p class="box-content-subheader">{{$treasury}}<br><span>Candidates</span></p>
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">Votes Cast</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 80%; background-color: #096c86"></span>
          </div>
          <p class="box-progress-percentage"> {{$treasury_cast}} /{{$registered_voters}}</p>
        </div>
        <div class="project-box-footer">
          <div class="participants">
            <img src="https://images.unsplash.com/photo-1587628604439-3b9a0aa7a163?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjR8fHdvbWFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="participant">
            <img src="https://images.unsplash.com/photo-1596815064285-45ed8a9c0463?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1215&q=80" alt="participant">


            <a href="{{ route('vote.tresury') }}" class="button-link">
  <button class="add-participant" style="color: #096c86;">
    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
      <path d="M12 5v14M5 12h14" />
    </svg>
  </button>
</a>


          </div>
          <div class="days-left" style="color: #096c86;">
            2 Days Left
          </div>
        </div>
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box" style="background-color: #ffd3e2;">
        
          <div class="more-wrapper">
            <button class="project-btn-more">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" /></svg>
            </button>
          
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header">Entertainment</p>
          <p class="box-content-subheader">{{$entertainment }}<br><span>Candidates</span></p>
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">Votes Cast</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 20%; background-color: #df3670"></span>
          </div>
          <p class="box-progress-percentage">{{$entertainment_cast}}/{{$registered_voters}}</p>
        </div>
        <div class="project-box-footer">
          <div class="participants">
            <img src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="participant">
            <img src="https://images.unsplash.com/photo-1587628604439-3b9a0aa7a163?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjR8fHdvbWFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="participant">
            <button class="add-participant" style="color: #df3670;">
            <a href="{{ route('vote.entertainment') }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
        <path d="M12 5v14M5 12h14" />
    </svg>
</a>

            </button>
          </div>
          <div class="days-left" style="color: #df3670;">
            2 Days Left
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
</div>

  <script  src="./script.js"></script>

</body>
</html>
