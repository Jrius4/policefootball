

        <div class="tm-top-b-box tm-full-width  ">
                <div class="uk-container uk-container-center">
                    <section id="tm-top-b" class="tm-top-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
    
                        <div class="uk-width-1-1">
                            <div class="uk-panel">
                            @if ($matchReports->count()>0)


                            
                            <div class="va-latest-wrap">
                                    <div class="uk-container uk-container-center">
                                        <div class="va-latest-top">
                                            <h3>Latest <span>Results</span></h3>
                                            <div class="tournament">
                                                <address>{{$matchReports->last()->match->venue}}<br><br></address> </div>
                                            <div class="date">
                                                {!!$matchReports->last()->match->date->locale('eng')->isoFormat('dddd, MMMM Do YYYY, h:mm') !!} 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="va-latest-middle uk-flex uk-flex-middle">
                                        <div class="uk-container uk-container-center">
                                            <div class="uk-grid uk-flex uk-flex-middle">
                                                <div class="uk-width-2-12 center">
                                                    <a href="results.html">
                                                        <img src="img/teams/{{$teams->where('id',$matchReports->last()->match->home_team_id)->first()->logo}}" class="img-polaroid" alt="" title="">
                                                    </a>
                                                </div>
                                                <div class="uk-width-3-12 name uk-vertical-align">
                                                    <div class="wrap uk-vertical-align-middle">
                                                            {{$teams->where('id',$matchReports->last()->match->home_team_id)->first()->name}}</div>
                                                </div>
                                                <div class="uk-width-2-12 score">
                                                    <div class="title">score</div>
                                                    <div class="table">
                                                        <div class="left">{!!$matchReports->last()->match->home_team_score !!} </div>
                                                        <div class="right"> {!!$matchReports->last()->match->away_team_score !!}</div>
                                                        <div class="uk-clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="uk-width-3-12 name alt uk-vertical-align">
                                                    <div class="wrap uk-vertical-align-middle">
                                                            {{$teams->where('id',$matchReports->last()->match->away_team_id)->first()->name}}</div>
                                                </div>
                                                <div class="uk-width-2-12 center">
                                                    <a href="results.html">
                                                       <img src="img/teams/{{$teams->where('id',$matchReports->last()->match->away_team_id)->first()->logo}}" class="img-polaroid" alt="" title="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-container uk-container-center">
                                        <div class="va-latest-bottom">
                                            <div class="uk-grid">
                                                <div class="uk-width-8-12 uk-container-center text">
                                                    <p>{!!$matchReports->last()->title !!} </p>
                                                </div>
                                            </div>
    
                                            <div class="uk-grid">
                                                <div class="uk-width-1-1">
                                                    <div class="btn-wrap uk-container-center">
                                                        <a class="read-more" href="results.html">More Info</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
    
                                
                            @elseif($matches->count()>0)
                                

                            
                            <div class="va-latest-wrap">
                                    <div class="uk-container uk-container-center">
                                        <div class="va-latest-top">
                                            <h3>Latest <span>Results</span></h3>
                                            <div class="tournament">
                                                <address>{{$matches->first()->venue}}<br><br></address> </div>
                                            <div class="date">
                                                {!!$matches->first()->date !!} 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="va-latest-middle uk-flex uk-flex-middle">
                                        <div class="uk-container uk-container-center">
                                            <div class="uk-grid uk-flex uk-flex-middle">
                                                <div class="uk-width-2-12 center">
                                                    <a href="results.html">
                                                        <img src="img/teams/{{$teams->where('id',$matches->first()->home_team_id)->first()->logo}}" class="img-polaroid" alt="" title="">
                                                    </a>
                                                </div>
                                                <div class="uk-width-3-12 name uk-vertical-align">
                                                    <div class="wrap uk-vertical-align-middle">
                                                            {{$teams->where('id',$matches->first()->home_team_id)->first()->name}}</div>
                                                </div>
                                                @if ($matches->first()->home_team_score==null && $matches->first()->away_team_score==null)
                                                    <div class="versus">VS</div>
                                                @else
                                                    <div class="uk-width-2-12 score">
                                                        <div class="title">score</div>
                                                        <div class="table">
                                                            <div class="left">{!!$matches->first()->home_team_score !!} </div>
                                                            <div class="right"> {!!$matches->first()->away_team_score !!}</div>
                                                            <div class="uk-clearfix"></div>
                                                        </div>
                                                    </div>
                                                @endif
                                                
                                                <div class="uk-width-3-12 name alt uk-vertical-align">
                                                    <div class="wrap uk-vertical-align-middle">
                                                            {{$teams->where('id',$matches->first()->away_team_id)->first()->name}}</div>
                                                </div>
                                                <div class="uk-width-2-12 center">
                                                    <a href="results.html">
                                                       <img src="img/teams/{{$teams->where('id',$matches->first()->away_team_id)->first()->logo}}" class="img-polaroid" alt="" title="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-container uk-container-center">
                                        <div class="va-latest-bottom">
                                            <div class="uk-grid">
                                                <div class="uk-width-1-1">
                                                    <div class="btn-wrap uk-container-center">
                                                        <a class="read-more" href="results.html">More Info</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                {{null}}
                            @endif

                            </div>
                        </div>
                    </section>
                </div>
            </div>
    
    