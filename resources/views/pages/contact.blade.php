@extends('main')
@section('title',"| Contact")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="form-group">
                    <label>Namne</label>
                    <input type="text" name="name" placeholder="Enter Name.." class="form-control">
                </div>
                 <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter Email.." class="form-control">
                </div>
                <div class="form-group">
                    <label>Subject</label>
                    <input type="subject" name="subject" placeholder="Enter Subject.." class="form-control">
                </div>
                 <div class="form-group">
                    <label>Message</label>
                    <textarea id="message" class="form-control" name="message" placeholder="Enter Message Here..."></textarea> 
                </div>
                <input type="submit" name="submit" value="Send Message" class="btn btn-success">

            </form>
        </div>
        
    </div>
@stop

