<!-- Choose Student Portal Modals -->
<style>
.modal-content {
    background-color: #eee;
}

.modal-title{
    opacity: 0.8;
    color: #c44d2d;
}

.btn-close{
    color: #c44d2d;
}

.card{
    background-color: transparent;
}

.card:hover{
    opacity: 0.8;
}

a{
    text-decoration: none;
}

.card-title {
    color: #000;
}

.card-text{
    color: #888;
}
</style>

<div class="modal fade" id="studentPanelModal" tabindex="-1" aria-labelledby="studentPanelModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentPanelModalLabel">Select Your Panel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a class="select-student-panel" href="new-student-panel.php">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">New Student Panel</h5>
                                <p class="card-text">For those students who admitted after Fall 2019</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12">
                    <a class="select-student-panel" href="old-student-panel.php">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Old Student Panel</h5>
                                <p class="card-text">For those students who admitted before Summer 2019</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>