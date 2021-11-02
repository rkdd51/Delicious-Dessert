const login = async(username,password) => {
    if(!username || !password)
    throw 'Missing Credentials'
    elseif()
    return 'welcome'
    else
    throw 'Invalid Password'
}

login()
.then(msg => {

     console.log("LOGGED IN!")
     console.log(msg)
    
})

.catch(err=> {
  console.log("ERROR!")
  console.log(err)

}
    )