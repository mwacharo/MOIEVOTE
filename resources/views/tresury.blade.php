<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Treasury Platform</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="app-container">
  <div class="app-header">
    <div class="app-header-left">
      <span class="app-icon"></span>
      <p class="app-name">MU - VOTING</p>
      <div class="search-wrapper">
        <input class="search-input" type="text" placeholder="Search">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search" viewBox="0 0 24 24">
          <defs></defs>
          <circle cx="11" cy="11" r="8"></circle>
          <path d="M21 21l-4.35-4.35"></path>
        </svg>
      </div>
    </div>
    <div class="app-header-right">
      <button class="mode-switch" title="Switch Theme">
        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
          <defs></defs>
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
      </button>
      <button class="add-btn" title="Add New Project">
        <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
          <line x1="12" y1="5" x2="12" y2="19" />
          <line x1="5" y1="12" x2="19" y2="12" /></svg>
      </button>
      <button class="notification-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
          <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
          <path d="M13.73 21a2 2 0 0 1-3.46 0" /></svg>
      </button>
      <button class="profile-btn">
        <img src="https://i.pinimg.com/236x/c5/9d/7a/c59d7a8dcaab66c7db47c3660e6abe4b.jpg" />
        <span>Anjeo</span>
      </button>
    </div>
    <button class="messages-btn">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" /></svg>
    </button>
  </div>
  <div class="app-content">
    <div class="app-sidebar">
      <a href="" class="app-sidebar-link active">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
          <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
          <polyline points="9 22 9 12 15 12 15 22" /></svg>
      </a>
      <a href="" class="app-sidebar-link">
        <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-pie-chart" viewBox="0 0 24 24">
          <defs />
          <path d="M21.21 15.89A10 10 0 118 2.83M22 12A10 10 0 0012 2v10z" />
        </svg>
      </a>
      <a href="" class="app-sidebar-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
          <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
          <line x1="16" y1="2" x2="16" y2="6" />
          <line x1="8" y1="2" x2="8" y2="6" />
          <line x1="3" y1="10" x2="21" y2="10" /></svg>
      </a>
      <a href="" class="app-sidebar-link">
        <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-settings" viewBox="0 0 24 24">
          <defs />
          <circle cx="12" cy="12" r="3" />
          <path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z" />
        </svg>
      </a>
    </div>
    <div class="projects-section">
      <div class="projects-section-header">
        <p>TREASURY</p>
        <p class="time">june, 20</p>
      </div>
      <div class="projects-section-line">
        <div class="projects-status">
          <div class="item-status">
            <span class="status-number">3</span>
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
          <img  style="width:6rem; height:6rem; border-radius:8px;" src="data:image/jpeg;base64,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">
          <p class="box-content-subheader"><span>John kiari</span></p>
        </div>
        <!-- <div class="box-progress-wrapper">
          <p class="box-progress-header">votes Cast</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 60%; background-color: #ff942e"></span>
          </div>
          <p class="box-progress-percentage">160000/231000</p>
        </div> -->
        <div class="project-box-footer">
          <div class="participants">
            <!-- <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="participant">
            <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG1hbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="participant"> -->
            <button class="add-participant" style="color: GREEN;">
              <!-- <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <path d="M12 5v14M5 12h14" />
              </svg> -->VOTE
            </button>
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
          <img  style="width:6rem; height:6rem; border-radius:8px;" src="data:image/jpeg;base64,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">
          <p class="box-content-subheader"><span>John kiari</span></p>
        </div>
        <!-- <div class="box-progress-wrapper">
          <p class="box-progress-header">votes Cast</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 60%; background-color: #ff942e"></span>
          </div>
          <p class="box-progress-percentage">160000/231000</p>
        </div> -->
        <div class="project-box-footer">
          <div class="participants">
            <!-- <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="participant">
            <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG1hbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="participant"> -->
            <button class="add-participant" style="color: GREEN;">
              <!-- <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <path d="M12 5v14M5 12h14" />
              </svg> -->VOTE
            </button>
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
          <img  style="width:6rem;  height:6rem;border-radius:8px;" src="data:image/jpeg;base64,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">
          <p class="box-content-subheader"><span>MO kiari</span></p>
        </div>
        <!-- <div class="box-progress-wrapper">
          <p class="box-progress-header">votes Cast</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 60%; background-color: #ff942e"></span>
          </div>
          <p class="box-progress-percentage">160000/231000</p>
        </div> -->
        <div class="project-box-footer">
          <div class="participants">
            <!-- <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="participant">
            <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG1hbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="participant"> -->
            <button class="add-participant" style="color: GREEN;">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <path d="M12 5v14M5 12h14" />
              </svg>VOTE
            </button>
          </div>
          <div class="days-left" style="color: #ff942e;">
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