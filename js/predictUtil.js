function validateForm() {
  var val = document.getElementById("inputSequence").value;
  if (
    val == "" &&
    document.getElementById("input_box").value == "" &&
    document.getElementsByName("uploadedfile")[0].value == ""
  ) {
    alert(
      "Please enter the genome sequence \nOR\nChoose input file in FASTA format!!!"
    );
    return false;
  }
  if (val != "" && val.search(/>/) == -1) {
    alert("Please provide the sequences in FASTA format only!!!!!!!!!");
    return false;
  }
  if (val != "" && val.search(/>/) != -1) {
    var lines = val.split(">");
    for (var i = 1; i < lines.length; i = i + 1) {
      var sequ = lines[i].split("\n");
      sequ.splice(0, 1);
      onlyseq = sequ.join("").trim();
      if (onlyseq.search(/>/) == -1 && onlyseq.length > 2) {
        if (
          onlyseq.search(/[B,D,E,F,H,I,J,K,L,M,N,O,P,Q,R,S,V,W,X,Y,Z]/) != -1
        ) {
          alert("Your Sequence contains non-natural nucleotide(s).");
          return false;
        }
        if (onlyseq.search(/[0,1,2,3,4,5,6,7,8,9]/) != -1) {
          alert(
            "Your Sequence contains digits. Please enter only alphabetical characters"
          );
          return false;
        }

        if (onlyseq.search(/[!,@,#,$,%,^,&.*,(,),:,;,",',?,`,~,.]/) != -1) {
          alert("Your Sequence contains special characters");
          return false;
        }
      }
    }
  }
}
