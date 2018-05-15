@extends('layouts.app')
@section('privateCss')

@endsection
@section('content')
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Tree Views & Controls
                    <small>interactive tree views and controls based on popular jsTree jquery plugin</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->
            <div class="page-toolbar">
                <!-- BEGIN THEME PANEL -->
                <div class="btn-group btn-theme-panel">
                    <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-settings"></i>
                    </a>
                    <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <h3>HEADER</h3>
                                <ul class="theme-colors">
                                    <li class="theme-color theme-color-default active" data-theme="default">
                                        <span class="theme-color-view"></span>
                                        <span class="theme-color-name">Dark Header</span>
                                    </li>
                                    <li class="theme-color theme-color-light " data-theme="light">
                                        <span class="theme-color-view"></span>
                                        <span class="theme-color-name">Light Header</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                <h3>LAYOUT</h3>
                                <ul class="theme-settings">
                                    <li> Theme Style
                                        <select class="layout-style-option form-control input-small input-sm">
                                            <option value="square">Square corners</option>
                                            <option value="rounded" selected="selected">Rounded corners</option>
                                        </select>
                                    </li>
                                    <li> Layout
                                        <select class="layout-option form-control input-small input-sm">
                                            <option value="fluid" selected="selected">Fluid</option>
                                            <option value="boxed">Boxed</option>
                                        </select>
                                    </li>
                                    <li> Header
                                        <select class="page-header-option form-control input-small input-sm">
                                            <option value="fixed" selected="selected">Fixed</option>
                                            <option value="default">Default</option>
                                        </select>
                                    </li>
                                    <li> Top Dropdowns
                                        <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                            <option value="light">Light</option>
                                            <option value="dark" selected="selected">Dark</option>
                                        </select>
                                    </li>
                                    <li> Sidebar Mode
                                        <select class="sidebar-option form-control input-small input-sm">
                                            <option value="fixed">Fixed</option>
                                            <option value="default" selected="selected">Default</option>
                                        </select>
                                    </li>
                                    <li> Sidebar Menu
                                        <select class="sidebar-menu-option form-control input-small input-sm">
                                            <option value="accordion" selected="selected">Accordion</option>
                                            <option value="hover">Hover</option>
                                        </select>
                                    </li>
                                    <li> Sidebar Position
                                        <select class="sidebar-pos-option form-control input-small input-sm">
                                            <option value="left" selected="selected">Left</option>
                                            <option value="right">Right</option>
                                        </select>
                                    </li>
                                    <li> Footer
                                        <select class="page-footer-option form-control input-small input-sm">
                                            <option value="fixed">Fixed</option>
                                            <option value="default" selected="selected">Default</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END THEME PANEL -->
            </div>
            <!-- END PAGE TOOLBAR -->
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="index.html">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">UI Features</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <!-- BEGIN PAGE CONTENT-->
        <div class="m-heading-1 border-green m-bordered">
            <h3>jsTree jQuery Plugin</h3>
            <p> jsTree is jquery plugin, that provides interactive trees. jsTree functions properly in either box-model (content-box or border-box), can be loaded as an AMD module, and has a built in mobile theme for responsive design, that can
                easily be customized. It uses jQuery's event system, so binding callbacks on various events in the tree is familiar and easy. For more info please check out
                <a href="https://www.jstree.com/" target="_blank">the official documentation</a>. </p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-social-dribbble font-blue-sharp"></i>
                            <span class="caption-subject font-blue-sharp bold uppercase">Default Tree</span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-cloud-upload"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-trash"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="tree_1" class="tree-demo">
                            <ul>
                                <li> Root node 1
                                    <ul>
                                        <li data-jstree='{ "selected" : true }'>
                                            <a href="javascript:;"> Initially selected </a>
                                        </li>
                                        <li data-jstree='{ "icon" : "fa fa-briefcase icon-state-success " }'> custom icon URL </li>
                                        <li data-jstree='{ "opened" : true }'> initially open
                                            <ul>
                                                <li data-jstree='{ "disabled" : true }'> Disabled Node </li>
                                                <li data-jstree='{ "type" : "file" }'> Another node </li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{ "icon" : "fa fa-warning icon-state-danger" }'> Custom icon class (bootstrap) </li>
                                    </ul>
                                </li>
                                <li data-jstree='{ "type" : "file" }'>
                                    <a href="http://www.jstree.com"> Clickanle link node </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-bubble font-green-sharp"></i>
                            <span class="caption-subject font-green-sharp bold uppercase">Checkable Tree</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;"> Option 1</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="javascript:;">Option 2</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Option 3</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Option 4</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="tree_2" class="tree-demo"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="portlet yellow-lemon box">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-cogs"></i>Contextual Menu with Drag & Drop </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"> </a>
                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                            <a href="javascript:;" class="reload"> </a>
                            <a href="javascript:;" class="remove"> </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="tree_3" class="tree-demo"> </div>
                        <div class="alert alert-success no-margin margin-top-10"> Note! Opened and selected nodes will be saved in the user's browser, so when returning to the same tree the previous state will be restored. </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="portlet red-pink box">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-cogs"></i>Ajax Tree with Drag & Drop </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"> </a>
                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                            <a href="javascript:;" class="reload"> </a>
                            <a href="javascript:;" class="remove"> </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="tree_4" class="tree-demo"> </div>
                        <div class="alert alert-info no-margin margin-top-10"> Note! The tree nodes are loaded from ../demo/jstree_ajax_data.php via ajax. </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT-->
        <!-- END PAGE BASE CONTENT -->
    </div>
@endsection
@section('privateJs')
@endsection