<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<!-- <img src="{{ asset('../resources/assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image"> -->
				@if(Auth::check())
				<img src="{{  url(Auth::user()->logo_users) }}" class="img-circle" alt="User Image">
				@else
				<p></p>
				@endif
			</div>
			<div class="pull-left info">
				<p> @if(Auth::check())
					{{Auth::user()->login_users}}

					@endif</p>
					<a href="#"><i class="fa fa-circle text-success"></i> Connecté</a>
				</div>
			</div>
			
			<!-- /.search form -->
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu">
				<li class="header">NAVIGATION PRINCIPALE</li>
				@if(Auth::check())
			  <?php 
			     $id = Auth::user()->id_users;
			            $droits = DB::table('droits')->where('id_users', '=', $id)->get();
			            $menus = DB::table('menus')->select('id_menus','libelle_menus', 'titre_menus','lien_menus')->where('visible_menus', '=', '1')->get();
			            $sous_menus = DB::table('sous_menus')->where('visible_sous_menus', '=', '1')->get();
			   ?>        
			    @foreach($menus as $menu)
			    <li class="treeview">
				    <a href="#">
	            		<i class="fa {{$menu->libelle_menus}}"></i> <span>{{($menu->titre_menus)}}</span>
	            		<span class="pull-right-container">
	            			<i class="fa fa-angle-left pull-right"></i>
	            		</span>
	            	</a>   
			        @foreach($sous_menus as $sous_menu)
			          @if($sous_menu->id_menus == $menu->id_menus)
			            @foreach($droits as $droit)
			              @if($droit->id_sous_menus == $sous_menu->id_sous_menus)
			            	<ul class="treeview-menu">
			            	<li><a href="{{URL::To($sous_menu->lien_sous_menus)}}"><i class="fa {{ $sous_menu->libelle_sous_menus }} text-aqua"></i> <span>{{ $sous_menu->titre_sous_menus }}</span></a></li>
			            	</ul>
			              @endif 
			            @endforeach
			          @endif			       
			        @endforeach        
			      </li>  
			    @endforeach
		@endif
		
			<li class="treeview">
				<a href="#">
					<i class="fa fa-pie-chart"></i> <span>ARTICLES</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{url('articles/create')}}"><i class="fa fa-circle-o"></i>Ajouter article</a></li>
					<li><a href="{{url('articles')}}"><i class="fa fa-circle-o"></i>Liste des articles</a></li>
				</ul>
			</li>
				<li class="treeview">
				<a href="#">
					<i class="fa fa-pie-chart"></i> <span>Commentaires</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{url('commentaires/create')}}"><i class="fa fa-circle-o"></i>Ajouter un commentaire</a></li>
					<li><a href="{{url('commentaires')}}"><i class="fa fa-circle-o"></i>Liste des commentaires</a></li>
				</ul>
			</li>
        	</ul>
		</section>
	</aside>