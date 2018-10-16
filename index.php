<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>CTEC DM Prototype Tracker</title>
  </head>
  <body>
    <h1>CTEC DM Prototype Tracker</h1>

   
   
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Current Grade</th>
      <th scope="col">Unit 1</th>
      <th scope="col">Unit 2</th>
      <th scope="col">Unit 3</th>
      <th scope="col">Unit 20</th>
      <th scope="col">Unit 21</th>
      <th scope="col">Unit 23</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Fail</td>

<!--        EXAMPLE EXAM UNIT WHEN CLICKED -->
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#unit23result" data-whatever="@mdo">F</button>

        <div class="modal fade" id="unit23result" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Unit 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
            <!--  FORM TO SELECT THE GRADE OF AN EXAM  FOR THE UNIT-->
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-secondary active">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Fail
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option2" autocomplete="off"> Nearly Pass
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off"> Pass
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off"> Merit
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off"> Distinction
                  </label>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </td>
<!--        EXAMPLE BUTTON WHEN CLICKED -->
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#unit1result" data-whatever="@mdo">F</button>

        <div class="modal fade" id="unit1result" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Unit 23</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
            <!--  FORM TO SHOW THE SUB CRITERIA FOR THE UNIT-->
                <form>
                  <div class="form-group">
<!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P1</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
<!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P2</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P3</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P4</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P5</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P6</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">M1</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">M2</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">M3</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">D1</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">D2</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                    
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </td>
<!--        EXAMPLE BUTTON WHEN CLICKED -->
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#unit23result" data-whatever="@mdo">F</button>

        <div class="modal fade" id="unit23result" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Unit 23</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
            <!--  FORM TO SHOW THE SUB CRITERIA FOR THE UNIT-->
                <form>
                  <div class="form-group">
<!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P1</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
<!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P2</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P3</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P4</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P5</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P6</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">M1</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">M2</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">M3</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">D1</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">D2</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                    
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </td>
     <!--        EXAMPLE BUTTON WHEN CLICKED -->
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#unit23result" data-whatever="@mdo">F</button>

        <div class="modal fade" id="unit23result" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Unit 23</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
            <!--  FORM TO SHOW THE SUB CRITERIA FOR THE UNIT-->
                <form>
                  <div class="form-group">
<!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P1</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
<!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P2</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P3</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P4</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P5</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P6</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">M1</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">M2</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">M3</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">D1</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">D2</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                    
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </td>
     <!--        EXAMPLE BUTTON WHEN CLICKED -->
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#unit23result" data-whatever="@mdo">F</button>

        <div class="modal fade" id="unit23result" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Unit 23</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
            <!--  FORM TO SHOW THE SUB CRITERIA FOR THE UNIT-->
                <form>
                  <div class="form-group">
<!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P1</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
<!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P2</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P3</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P4</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P5</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P6</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">M1</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">M2</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">M3</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">D1</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">D2</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                    
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </td>
        
<!--        EXAMPLE BUTTON WHEN CLICKED -->
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#unit23result" data-whatever="@mdo">F</button>

        <div class="modal fade" id="unit23result" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Unit 23</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
            <!--  FORM TO SHOW THE SUB CRITERIA FOR THE UNIT-->
                <form>
                  <div class="form-group">
<!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P1</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
<!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P2</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P3</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P4</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P5</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">P6</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">M1</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">M2</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">M3</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">D1</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <!--                   criteria -->
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
<!--                          add in the label for the forms -->
                           <span class="input-group-text">D2</span>
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                    
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>Fail</td>
      <td>P</td>
      <td>M</td>
      <td>P</td>
      <td>D</td>
      <td>F</td>
      <td>D</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>Fail</td>
      <td>P</td>
      <td>M</td>
      <td>P</td>
      <td>D</td>
      <td>F</td>
      <td>D</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>Fail</td>
      <td>P</td>
      <td>M</td>
      <td>P</td>
      <td>D</td>
      <td>F</td>
      <td>D</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>Fail</td>
      <td>P</td>
      <td>M</td>
      <td>P</td>
      <td>D</td>
      <td>F</td>
      <td>D</td>
    </tr>
     <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>Fail</td>
      <td>P</td>
      <td>M</td>
      <td>P</td>
      <td>D</td>
      <td>F</td>
      <td>D</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>Fail</td>
      <td>P</td>
      <td>M</td>
      <td>P</td>
      <td>D</td>
      <td>F</td>
      <td>D</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>Fail</td>
      <td>P</td>
      <td>M</td>
      <td>P</td>
      <td>D</td>
      <td>F</td>
      <td>D</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>Fail</td>
      <td>P</td>
      <td>M</td>
      <td>P</td>
      <td>D</td>
      <td>F</td>
      <td>D</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>Fail</td>
      <td>P</td>
      <td>M</td>
      <td>P</td>
      <td>D</td>
      <td>F</td>
      <td>D</td>
    </tr>
  </tbody>
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
