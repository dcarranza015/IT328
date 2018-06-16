<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 5/29/18
 * Time: 9:23 PM
 */


include "../views/parts/header.php";
include "../views/parts/footer.php";

?>
<include href="views/parts/header.php"></include>

<div class="container">
    <div class="row">

        <div class="col-sm-4" style="background-color:#b3cdd2;">
            <div class="form-group">
                <div class="form-group row">
                    <div class="col-sm">
                        <h3 align="center">Welcome to Bookmark Share</h3>
                    </div>
                </div>
                <hr>
                <!-- Button trigger modal for Creating a List -->
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">
                    Create a List
                </button>

                <!-- Modal for Creating a new List -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Create a  New List</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" placeholder="text">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button id="createList" type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <!-- Button trigger modal for Adding a Bookmark Link-->
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal2">
                    Add a Link
                </button>

                <!-- Modal for adding a New Bookmark Link-->
                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel2">Add a new Bookmark</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" placeholder="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="link" class="col-sm-2 col-form-label">Link</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="link" placeholder="https://...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="link" class="col-sm-2 col-form-label">Link</label>
                                    <div class="col-sm-8">
                                        <div class="dropdown">
                                            <button class="btn btn-default " type="button" id="rating" data-toggle="dropdown">Rating
                                                <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                                <li role="presentation" id="rating"><a role="menuitem" tabindex="-1" href="#">5 stars</a></li>
                                                <li role="presentation" id="rating"><a role="menuitem" tabindex="-1" href="#">4 stars</a></li>
                                                <li role="presentation" id="rating"><a role="menuitem" tabindex="-1" href="#">3 stars</a></li>
                                                <li role="presentation" id="rating"><a role="menuitem" tabindex="-1" href="#">2 stars</a></li>
                                                <li role="presentation" id="rating"><a role="menuitem" tabindex="-1" href="#">1 stars</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" id="addBookmark" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <hr>
                <button type="button" class="btn btn-link">Logout</button>
            </div>
        </div>
        <div class="col-sm" style="background-color:#ebdde1;">
            <div class="form-group row">
                <div class="col-sm">
                    <h3 align="center">Successfully Logged in</h3>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm text-center">
                    <!-- Button trigger modal Need help getting started -->
                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal3">
                        Need help getting started?
                    </button>

                    <!-- Modal for Need help getting started -->
                    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-body" align="left">
                                    <h3 class="modal-title" id="exampleModalLabel3">Adding a new bookmark</h3>

                                    <i>Add a new link using the navigation bar on the left. Each bookmark will
                                    be saved so you can revisit the webpage at a later time</i>
                                    <br><br>
                                    <h3 class="modal-title" id="exampleModalLabel3">Creating Lists</h3>
                                    <i>Lists are used to group together bookmarks and keep them organized To
                                    create a new list just use the navigation bar on the left and give it a name!
                                    Bookmarks can be moved to a list or between lists. Any bookmarks that is not
                                    part of a list will be displayed un an "Unsorted Linked List".</i>
                                    <br><br>
                                    <h3 class="modal-title" id="exampleModalLabel3">Editing Bookmarks</h3>
                                    <i>To change or remove a bookmark, just use the editing icons next to each link</i>
                                </div>
                                <div class="modal-footer " >
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table id="linkTable" class="table table-striped">
                <thead><tr><th>Name</th><th>Link</th><th>Rating</th><th>Edit</th></tr></thead>
                <tbody id="linkBody">
                <tr><td>Facebook</td><td>https://facebook.com</td><td>*****</td><td>Edit</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<include href="views/parts/footer.php"></include>

