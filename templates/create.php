<?php include('./includes/header.php');?>
<form role="form" method="post" action="create.php">
                    <div class="form-group">
                        <label>Topic Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter topic title">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category">
                        <?php foreach(getCategories() as $category) : ?>
                        <option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
                        <?php endforeach;?>     
                        </select>
                    </div>
                        <div class="form-group">
                            <label>Topic Body</label>
                            <textarea name="body"  id="body" cols="30" rows="10" class="form-control ck-editor"></textarea>
                            <script>
                            ClassicEditor
                                .create( document.querySelector( '#body' ), {
                                    toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                                    heading: {
                                        options: [
                                            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                                            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                                            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                                        ]
                                    }
                                } )
                                .catch( error => {
                                    console.log( error );
                                } );
                            </script>
                        </div>
                        <button type="submit" class="btn btn-primary" name="do_create">Submit</button>
                </form>
<?php include('./includes/footer.php');?>