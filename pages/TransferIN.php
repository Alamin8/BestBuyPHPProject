
<form action="./TransferINsubmit.php" class="transfer_in" method="POST" enctype="multipart/form-data">
    <div class="ti_top">
        <div class="ti_top_left">
            <div class="ti_top_con">
                <div class="ti_comon">
                    <p>Company Name:</p>
                    <select>
                        <option value="" selected>DLCL</option>
                    </select>
                </div>
                <div class="ti_comon">
                    <p>Deport:</p>
                    <select>
                        <option value="" selected>BBUY JAMGORA ASHULIA</option>
                    </select>
                </div>
                <div class="ti_comon">
                    <p>Type:</p>
                    <select>
                        <option value="" selected>Post Delevery</option>
                        <option value="">Cash On Delevery</option>
                    </select>
                </div>
                <div class="ti_comon">
                    <p>OC Number:</p>
                    <input type="file" name="doc">
                </div>
            </div>
            <div class="ti_top_btn">
                <textarea name="" id=""> item_code, product_name, product_group, stoc, mrp </textarea>
                <button class="add_entries">Add All Entries</button>
            </div>
        </div>
        <div class="ti_top_right">
            <p>Transfer In (TI)</p>
        </div>
    </div>
    <div class="ti_middle">

    </div>
    <div class="ti_bottom">
        <button class="entry_btn add_entries">Add New</button>
        <button class="entry_btn add_entries" type="submit" name="TIsubmit">Save</button>
    </div>
</form>