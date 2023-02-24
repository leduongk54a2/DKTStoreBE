<form action={{  route('baiviet.store') }} method="post">
    @csrf
    <div>
        <label for="title">Tieu de:</label>
        <input type="text" name="title"/>

    </div>
    <div>
        <label for="content">Noi Dung:</label>
        <br/>
        <textarea cols="28" rows="10" name="content"> </textarea>
    </div>
    <br/>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>


