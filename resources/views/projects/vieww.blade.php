@extends('layouts.app')
@section('content')
<div class="container">
    <div class="text-center d-flex justify-content-center mt-5 row">
        <div class="col-8">
            <h1 class="text-light border-dark bg-success py-2 rounded-pill my-4">PROJECT - <span class="badge text-bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Project ID">55</span> Upton Goodwin</h1>
        </div>
    </div>
    <div class="row">
        <div class=" col-6 card rounded bg-light mb-4 shadow">
            <div class="card-body">
                <h5 class="card-title">Project Details: Distinctio Officia </h5>
                <span class="badge text-bg-warning px-3 py-2 " data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Due Date">1994-11-08</span>
                <h2 class="card-title">Status: On-going</h2>
                <p>Description: Magni molestiae atqu</p>
            </div>
        </div>
    </div>

    <!-- Tasks Table -->
    <div class="container mb-4">
        <div class="card shadow ">
            <div class="card-header">
                <div class="row justify-content-between">
                    <div class="col-6">
                        <h5>Task Management</h5>
                    </div>
                    <div class="col-6 text-end">
                        <button type="button" class="btn btn-primary mt-2 me-2 btn-sm" data-bs-toggle="modal" data-bs-target="#addTaskModal">Add Task</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped mt-4">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Task Name</th>
                            <th scope="col">Task Details</th>
                            <th scope="col">Assigned To</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1 </td>
                            <td>
                                Wilma Bell </td>
                            <td>
                                Tempora tempora beat </td>
                            <td>
                                Incidunt sit sunt </td>

                            <td>
                                <button type="button" class="btn btn-info">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Add Task Modal -->
    <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTaskModalLabel">Add Task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" id="project_id" value="55" name="project_id" required>
                        </div>
                        <div class="mb-3">
                            <label for="taskName" class="form-label">Task Name</label>
                            <input type="text" class="form-control" id="taskName" name="task_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="taskDetails" class="form-label">Task Details</label>
                            <textarea class="form-control" id="taskDetails" rows="3" name="task_details" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="assignedTo" class="form-label">Assign To</label>
                            <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="assign_to">
                                <option selected disabled>Status</option>
                                <option value="127">Rupansh </option>
                                <option value="146">Allen Gibson</option>
                                <option value="147">amit mthewss</option>
                                <option value="148">Stewart rrrrfdsfdsf</option>
                                <option value="149">dddd</option>
                                <option value="150">Hedy Barnes</option>
                                <option value="151">Bernard sss</option>
                                <option value="152">Kelsey Palmer</option>
                                <option value="153">Teegan Holloway</option>
                                <option value="154">Merritt Colon</option>
                                <option value="155">Deacon Cross</option>
                                <option value="156">AMIT</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection