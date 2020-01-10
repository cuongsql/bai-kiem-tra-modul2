<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Add Product</h1>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Sectors</label>
                    <select class="custom-select custom-select-lg mb-3" name="sectors">
                    <option value="Dien Thoai">Điện thoại</option>
                    <option value="Tu Lach">Tủ lạnh</option>
                    <option value="Dieu Hoa">Diều hòa</option>
                </select>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price">
                </div>
                <div class="form-group">
                    <label>Amount</label>
                    <input type="number" class="form-control" name="amount">
                </div>
                <div class="form-group">
                    <label>Teaser</label>
                    <input type="text" class="form-control" name="teaser">
                </div> 
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>