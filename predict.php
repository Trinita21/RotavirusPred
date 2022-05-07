<?php include("header.php"); ?>

<main class="grow mt-14 py-4 text-center mx-auto w-full">
    <div class="flex flex-col justify-center items-center text-lg">
      <div class="text-xl my-4">
      <h1 class="text-2xl md:text-3xl">Welcome to the predict page!</h1>
        <p>This is the predict page for the RotaPred website.</p>
      </div>
    
      <form action="" class="px-2 flex flex-col items-start">
          <label for="" class="text-2xl mb-2 pr-2 text-left">Enter a protein sequence to predict</label>
        <textarea
          class="py-4 px-2 my-2 w-full border border-black rounded-md shadow"
          type="text"
          placeholder="Enter a sequence"
        ></textarea>
        <div class="flex flex-wrap md:flex-nowrap justify-center">
          <label for="" class="text-2xl mb-4 pr-2 text-left">Or Choose a File</label>
          <input type="file" name="" id="">
        </div>
        
        <div class="flex flex-wrap md:flex-nowrap justify-center items-center md:w-full">
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