package model;


import java.util.Set;

import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToMany;
import javax.persistence.Table;






@Entity
@Table(name="categorieart")
public class Categorieart {
	@Id
	@Column(name="nomCat")
	protected String nomCat;
	
	@Column(name="description")
	protected String description;
	
	public Categorieart() {
	}
	
	//@OneToMany(fetch = FetchType.EAGER, cascade = {CascadeType.REMOVE, CascadeType.REFRESH}, mappedBy = "categorieart")
   // private Set<Article> article;
	
	public Categorieart(String nomCat, String description) {
		super();
		this.nomCat = nomCat;
		this.description = description;
	}

	public String getnomCat() {
		return nomCat;
	}

	public void setnomCat(String nomCat) {
		this.nomCat = nomCat;
	}

	public String getdescription() {
		return description;
	}

	public void setdescription(String description) {
		this.description = description;
	}

	

}
