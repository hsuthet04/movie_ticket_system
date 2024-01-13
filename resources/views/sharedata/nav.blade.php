 <!-- ==========Header-Section========== -->
 <header class="header-section p-2" style="background-color: black;">
     <div class="container">
         <div class="header-wrapper">
             <div class="logo">
                 <a href="/">
                     <img src="{{ asset('assets/images/logo/logo.jpg') }}" alt="logo"
                         style="width: 50px; height :50px;">
                     <span class="webname">Teddy Cine</span>
                 </a>
             </div>
             <ul class="menu">
                 <li>
                     <a href="#">movies</a>
                     <ul class="submenu">
                         <li>
                             <a href="/movie/movie_list">Movie List</a>
                         </li>
                         <li>
                             <a href="/movie/movie_detail">Movie Details</a>
                         </li>
                         <li>
                             <a href="movie-ticket-plan.html">Movie Ticket Plan</a>
                         </li>
                     </ul>
                 </li>
                 <li>
                     <a href="#0">news</a>
                     <ul class="submenu">
                         <li>
                             <a href="blog.html">Blog</a>
                         </li>
                         <li>
                             <a href="blog-details.html">Blog Single</a>
                         </li>
                     </ul>
                 </li>
                 <li>
                     <a href="contact.html">contact</a>
                 </li>
                 @auth
                 @if (auth()->user()->role == 1)
                     <li>
                         <a href="/admin/home">Admin</a>
                     </li>
                 @endif
                 
                     <li>
                         {{ auth()->user()->name }}
                     </li>
                     <li>
                         <a href="">
                             <form method="POST" action="/user/logout">
                                 @csrf
                                 <button type="submit" style="background-color: black; color:white;">Log out</button>
                             </form>
                         </a>
                     </li>
                 @else
                     <li class="header-button pr-0">
                         <a href="/user/register">join us</a>
                     </li>

                 @endauth


             </ul>
             <div class="header-bar d-lg-none">
                 <span></span>
                 <span></span>
                 <span></span>
             </div>
         </div>
     </div>
 </header>
 <!-- ==========Header-Section========== -->
