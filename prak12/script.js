const ytKey = 'AIzaSyA-XmEljHzqpye-YS1vIi-7OkhfKNkCd-s';
const ytUser = 'UCOmHUn--16B90oW2L6FRR3A';
const subsCount = document.getElementById('subCount')
let getSubs = () => {
    fetch(`https://www.googleapis.com/youtube/v3/channels?part=statistics&id=${ytUser}&fields=items/statistics/subscriberCount&key=${ytKey}`)
    .then(response => {
        return response.json()
    })
    .then(data => {
        console.log(data);
        subsCount.innerHTML = data["items"][0].statistics.subscriberCount;
    })
}
getSubs();