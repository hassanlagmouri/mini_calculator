<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <section class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Simple Calculator</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('operation') }}" method="post">
                            @csrf
                            <div class="row">
                                @if ($errors->any())
                                    <div class="col-12">
                                        <div class="alert alert-danger" role="alert">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-12">
                                    <div class="mb-3">
                                        <input type="number" name="v1" required class="form-control form-control-lg" id="first_value" placeholder="First value" value="{{ old('v1') }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <select required class="form-select form-select-lg mb-3" name="op">
                                        <option selected value="add">Plus (+)</option>
                                        <option {{ old('op') == 'sub' ? 'selected' : '' }} value="sub">Minus (-)</option>
                                        <option {{ old('op') == 'mul' ? 'selected' : '' }} value="mul">Times (x | *)</option>
                                        <option {{ old('op') == 'div' ? 'selected' : '' }}  value="div">Divided by (/)</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <input required type="number" name="v2" class="form-control form-control-lg" id="second_value" placeholder="Second value" value="{{ old('v2') }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn mb-3 btn-lg btn-secondary w-100" type="submit">=</button>
                                </div>
                                <div class="col-12">
                                    <div class="">
                                        <label for="result" class="form-label">Result</label>
                                        <input readonly type="number" class="form-control form-control-lg" id="result" name="result" placeholder="=" value="{{ session('result') ? session('result') : null }}">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>