
  function validate(form)
  {
    fail  = validateTitle(form.title.value)
    fail += validateEntry(form.entry.value)

    if   (fail == "")   return true
    else { alert(fail); return false }
  }

  function validateTitle(field)
  {
    return (field == "") ? "Must enter a title.\n" : ""
  }

  function validateEntry(field)
  {
    return (field == "") ? "Must enter some text.\n" : ""
  }
