@extends('admin.master')
@section('main-content')

	<div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Ui Form</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Setting</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="website" type="text" value="www.websitename.com" class="validate">
                                                <label for="website">Website</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="blog_name" type="text" value="www.websitename.com/blog" class="validate">
                                                <label for="blog_name">Blog</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="phone" type="text" value="+01 1234 4654" class="validate">
                                                <label for="phone">Mobile</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="cphone" type="text" value="+01 6541 32145" class="validate">
                                                <label for="cphone">Phone</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="password" type="password" value="aksdjfhasdf" class="validate">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="password1" type="password" value="asdfaefrerfg" class="validate">
                                                <label for="password1">Confirm Password</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="f_name" type="text" value="www.websitename.com/facebook" class="validate">
                                                <label for="f_name">Facebook</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="g_name" type="text" value="www.websitename.com/google plus" class="validate">
                                                <label for="g_name">Google plus</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="email" type="email" value="marshahi@mail.com" class="validate">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="email1" type="email" value="marshahi@mail.com" class="validate">
                                                <label for="email1">Alternate Email</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" class="waves-effect waves-light btn-large">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection