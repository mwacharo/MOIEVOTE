<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Treasury Platform</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
@include('head')
 @include('sidebnav')



    <div class="projects-section">
      <div class="projects-section-header">
        <p>TREASURY</p>
        <p class="time">june, 20</p>
      </div>
      <div class="projects-section-line">
        <div class="projects-status">
          <div class="item-status">
            <span class="status-number">{{$total_tresury}}</span>
            <span class="status-type"> Treasury Canditates</span>
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
       @foreach ($tresurys  as  $tresury)
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
          <img  style="width:12rem; height:12rem; border-radius:16px;" src="/images/{{$tresury->image }}">
          <p class="box-content-subheader"><span>{{  $tresury->candidate_name }}</span></p>
        </div>
     
        <div class="project-box-footer">
          <div class="participants">
            
          <form action="{{ route('vote.create') }}" method="POST">
           @csrf
         <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
         <input type="hidden" name="candidate_id" value="{{  $tresury->id }}">
         <input type="hidden" name="status" value= 1>
          <input type="hidden" name="group_id" value="{{ $tresury->group_id }}">
          <button class="add-participant" style="color: green;" type="submit">
         VOTE
            </button>
           </form>

          </div>
          <div class="days-left" style="color: #ff942e;">
            2 Days Left
          </div>

        </div>
      </div>
    </div>

    @endforeach
      
        
        

 
  <script  src="./script.js"></script>

</body>
</html>