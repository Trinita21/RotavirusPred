<?php include("header.php"); ?>

<main class="grow text-center py-4 mx-auto">
    <div>
        <h1>Welcome to the predict page!</h1>
        <p>This is the predict page for the RotaPred website.</p>
    </div>
    <div class="flex flex-col justify-center items-center text-2xl">
      <h1 >
        
      </h1>
      <form action="" class="px-2 flex flex-col items-center lg:w-2/4">
          <label for="" class="text-4xl mb-4 px-2 text-center">Enter a protein sequence to predict</label>
        <textarea
          class="py-4 px-2 my-2 w-full border border-black rounded-md shadow"
          type="text"
          placeholder="Enter a sequence"
        ></textarea>
        <label for="" class="text-4xl mb-4 px-2 text-center">Or Choose a File</label>
        <input type="file" name="" id="">
        <div>
        <button
          type="reset"
          class="border-2 border-gray-800 bg-gray-900 text-white mt-4 mx-2 py-2 px-3 rounded hover:bg-indigo-700"
        >
          Clear
        </button>
        <button
          type="submit"
          class="border-2 border-indigo-500 text-black mt-4 mx-2 py-2 px-3 rounded hover:bg-indigo-700"
        >
          Example Sequence
        </button><button
          type="submit"
          class="border-2 border-indigo-600 bg-indigo-500 text-white mt-4 mx-2 py-2 px-3 rounded hover:bg-indigo-700"
        >
          Submit
        </button>
        </div>
       
      </form>
    </div>


</main>
<?php include("footer.php"); ?>
</body>
</html>