using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class DataLoader : MonoBehaviour {

	public string[] users;
	
	IEnumerator Start () {
		WWW userData = new WWW("http://localhost/Test/UserData.php");
		yield return userData;
		string userDataString = userData.text;
		print (userDataString);
		users = userDataString.Split(';');
		print (GetDataValue(users[0], "Points:"));
	}

	string GetDataValue(string data, string index){
		string value = data.Substring(data.IndexOf(index) + index.Length);
		if(value.Contains("|"))value = value.Remove(value.IndexOf("|"));
		return value;
	}
	
	
}
