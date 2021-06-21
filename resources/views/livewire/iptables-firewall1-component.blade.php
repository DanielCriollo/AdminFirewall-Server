<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-9">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>
                                            Reglas 
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reglas1 as $regla1)
                                        <tr>
                                            <td>{{$regla1}}</td>
                                        </tr>
                                        @endforeach     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-9">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>
                                            Reglas -t nat
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reglas2 as $regla2)
                                        <tr>
                                            <td>{{$regla2}}</td>
                                        </tr>
                                        @endforeach     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
