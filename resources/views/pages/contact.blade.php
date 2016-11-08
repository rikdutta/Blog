@extends('main')

@section('title', '| Contact')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Contact me</h1>
            
            <form>

                <div class="form-group">
                    <label name="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>

                 <div class="form-group">
                    <label name="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" class="form-control">
                </div>

                 <div class="form-group">
                    <label name="message">Message:</label>
                    <textarea id="message" name="message" placeholder="Type your text here..." class="form-control"></textarea>
                </div>

                 <div class="form-group">
                    <input type="submit" value="send message" class="btn btn-success btn-lg">
                </div>

            </form>

        </div>
    </div>

 @endsection 