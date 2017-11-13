using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class GunDataInsert : MonoBehaviour {

	public string inputName;
	public string inputClipSize;
	public string inputDamage;

	string CreateGunUrl = "http://localhost/Test/InsertGunsData.php";

	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		if(Input.GetKeyDown(KeyCode.Space)) CreateGun(inputName,inputClipSize,inputDamage);
	}

	public void CreateGun(string name,string clip_size,string damage){
		WWWForm form = new WWWForm();
		form.AddField("gun_name_post",name);
		form.AddField("gun_clip_size_post",clip_size);
		form.AddField("gun_damage_post",damage);

		WWW web = new WWW(CreateGunUrl,form);

	}
}
